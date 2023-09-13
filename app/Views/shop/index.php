<div class="container mx-auto "> 
	<main>
		<?php if(! empty($artpieces) && is_array($artpieces)): ?>
		<section class="py-12" id="art-listings">
			<div class="container mx-auto">
				<h2 class="text-3xl font-semibold mb-4">Shop Unique Art Pieces</h2>
				<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
				<?php foreach($artpieces as $art_item): ?>	
					<div class="bg-white p-4 rounded-lg shadow-md">
						<img src="<?php echo base_url('assets/images/'. $art_item['image_url']); ?>" alt="<?php echo $art_item['title']; ?>" class="w-full h-auto rounded">
						<h3 class="text-xl font-semi-bold mt-2"><?= $art_item['title'] ?></h3>
						<p class="text-gray-700 mt-2"><?= $art_item['description'] ?></p>
					</div>
				<?php endforeach ?>
				</div>
			</div>
		</section>
		<?php endif ?>

	</main>>
</div>

