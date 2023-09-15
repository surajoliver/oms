    <div class="max-w-3xl mx-auto bg-white p-4 shadow-md rounded-lg">:
        <h1 class="text-2xl font-semibold mb-4">Records</h1>
        <div class="flex justify-between mb-4">
         	<a href="<?php echo site_url('products/new'); ?>" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md text-sm"><i class="fa-solid fa-plus"></i>&nbsp;Create Record</a>
            <div class="relative">
                <input type="text" class="border border-gray-300 rounded-md px-4 py-2 pr-8 w-64" placeholder="Search...">
                <button class="absolute right-2 top-2 text-gray-500 hover:text-gray-600">
            	<i class="fa-solid fa-magnifying-glass"></i>    
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
                        <a href="<?php echo site_url('products/edit/'. $product['id']); ?>" class="text-blue-500 hover:text-blue-600 mr-2"><i class="fa-regular fa-pen-to-square"></i></a>
                        <a href="<?php echo site_url('products/delete/'. $product['id']); ?>" class="text-red-500 hover:text-red-600"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
				</tr>
				<?php endforeach; ?>
			</tbody>
        </table>
    </div>
