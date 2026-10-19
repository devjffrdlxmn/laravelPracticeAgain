<x-layout >

<div class ="mt-6 text-white" >
  <h2 class="font-bold">YOUR IDEA</h2>
    <div class="mt-6">
        <p>{{ $idea->description }}</p>

    </div>
    <div>
        <a href="/ideas/{{ $idea->id }}/edit" class="block w-15 bg-blue-500 text-white font-bold p-4 rounded-lg">Edit</a>
    </div>
</div>
</x-layout>