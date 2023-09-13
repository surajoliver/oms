<div class="max-w-md mx-auto bg-white p-4 shadow-md rounded-lg">
        <h1 class="text-2xl font-semibold mb-4"><?= esc($title); ?></h1>
        <?= session()->getFlashdata('error') ?>
		<?= validation_list_errors() ?>
		<form method="post" action="/products/store">
			<?= csrf_field() ?>
            <div class="mb-4">
                <label class="block text-gray-600 text-sm font-semibold mb-2" for="name">Title</label>
                <input type="text" id="name" name="name" class="border border-gray-300 rounded-md px-4 py-2 w-full" value="<?php echo $product['title']; ?>">
            </div>
            <div class="mb-4">
                <label class="block text-gray-600 text-sm font-semibold mb-2" for="email">Artist</label>
                <input type="text" id="artist" name="email" class="border border-gray-300 rounded-md px-4 py-2 w-full" value="<?php echo $product['artist']; ?>">
            </div>
            <div class="mb-4">
                <label class="block text-gray-600 text-sm font-semibold mb-2" for="phone">Description</label>
                <textarea id="description" name="description" class="border border-gray-300 rounded-md px-4 py-2 w-full"><?php echo $product['description']; ?> </textarea>
            <?php if($this->validator->hasError('description')): ?>
				<div class="alert alert-danger"><?= $this->validator->getError('description'); ?></div>
			<?php endif; ?>

			</div>
            <div class="mb-4">
                <label class="block text-gray-600 text-sm font-semibold mb-2" for="address">Image URL</label>
                <input type="text" id="imageurl" name="imageurl" class="border border-gray-300 rounded-md px-4 py-2 w-full" value="<?php echo $product['image_url']; ?>">
            </div>
            <div class="mb-4">
				<label class="block text-gray-600 text-sm font-semibold mb-2" for="price">Price</label>
				<input type="text" id="price" name="price" class="border border-gray-300 rounded-md px-4 py-2 w-full" value="<?php echo $product['price']; ?>">
			</div>
			<div class="flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md text-sm">Save</button>
            </div>
        </form>
    </div>
<?php print_r($product); ?>
