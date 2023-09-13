    <div class="max-w-3xl mx-auto bg-white p-4 shadow-md rounded-lg">:
        <h1 class="text-2xl font-semibold mb-4">Records</h1>
        <div class="flex justify-between mb-4">
            <a href="<?php echo site_url('products/new'); ?>" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md text-sm">Create Record</a>
            <div class="relative">
                <input type="text" class="border border-gray-300 rounded-md px-4 py-2 pr-8 w-64" placeholder="Search...">
                <button class="absolute right-2 top-2 text-gray-500 hover:text-gray-600">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-5.2-5.2M15 9a6 6 0 100 12 6 6 0 000-12z"></path>
                    </svg>
                </button>
            </div>
        </div>
        <table class="min-w-full border rounded-lg">
            <thead>
                <tr>
                    <th class="bg-gray-200 text-gray-700 border px-4 py-2">ID</th>
                    <th class="bg-gray-200 text-gray-700 border px-4 py-2">Name</th>
                    <th class="bg-gray-200 text-gray-700 border px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
				<?php foreach ($products as $product): ?>
                <tr>
                    <td class="border px-4 py-2"><?php echo $product['id']; ?></td>
                    <td class="border px-4 py-2"><?php echo $product['title']; ?></td>
                    <td class="border px-4 py-2">
                        <a href="<?php echo site_url('products/edit/'. $product['id']); ?>" class="text-blue-500 hover:text-blue-600 mr-2">Edit</a>
                        <a href="<?php echo site_url('products/delete/'. $product['id']); ?>" class="text-red-500 hover:text-red-600">Delete</a>
                    </td>
				</tr>
				<?php endforeach; ?>
			</tbody>
        </table>
    </div>
