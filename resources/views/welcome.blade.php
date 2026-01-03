<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <a href="{{ url('/') }}" class="text-blue-600 font-semibold hover:underline">Home</a>
            <a href="{{ url('/create') }}" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-blue-700">Create New Post</a>


        </div>
        <h2 class="text-2xl font-bold mb-4">All Posts</h2>

        <div class="overflow-x-auto bg-white rounded shadow">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Name</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Description</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Image</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($posts as $post)
                    <tr>
                        <td class="px-6 py-4">{{ $post->name }}</td>
                        <td class="px-6 py-4">{{ $post->description }}</td>
                        <td class="px-6 py-4">
                            <img src="{{ asset('storage/images/' . $post->image) }}" alt="{{ $post->name }}" class="h-16 w-16 object-cover rounded">
                        </td>

                    </tr>
                    @endforeach
                    @if($posts->isEmpty())
                    <tr>
                        <td colspan="4" class="px-6 py-4 text-center text-gray-500">No posts found.</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>


</body>

</html>