<div class="max-w-md mx-auto bg-white p-4 shadow-md rounded-lg">
        <h1 class="text-2xl font-semibold mb-4"><?= esc($title); ?></h1>
		<?= session()->getFlashdata('error') ?>
		<?= validation_list_errors() ?>
        <form method="post" action="/products/create">
			<?= csrf_field() ?>
            <div class="mb-4">
                <label class="block text-gray-600 text-sm font-semibold mb-2" for="title">Title</label>
                <input type="text" id="title" name="title" class="border border-gray-300 rounded-md px-4 py-2 w-full" value="<?= set_value('title') ?>">
            </div>
            <div class="mb-4">
                <label class="block text-gray-600 text-sm font-semibold mb-2" for="artist">Artist</label>
                <input type="text" id="artist" name="artist" class="border border-gray-300 rounded-md px-4 py-2 w-full" value="<?= set_value('artist') ?>">
            </div>
            <div class="mb-4">
                <label class="block text-gray-600 text-sm font-semibold mb-2" for="description">Description</label>
                <textarea id="description" name="description" class="border border-gray-300 rounded-md px-4 py-2 w-full"><?= set_value('description') ?></textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-600 text-sm font-semibold mb-2" for="imageurl">Image URL</label>
                <input type="text" id="imageurl" name="imageurl" class="border border-gray-300 rounded-md px-4 py-2 w-full" value="<?= set_value('image_url') ?>">
            </div>
            <div class="mb-4">
				<label class="block text-gray-600 text-sm font-semibold mb-2" for="price">Price</label>
				<input type="text" id="price" name="price" class="border border-gray-300 rounded-md px-4 py-2 w-full" value="<?= set_value('price') ?>">
			</div>
			<div class="flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md text-sm">Save</button>
            </div>
        </form>
    </div>

