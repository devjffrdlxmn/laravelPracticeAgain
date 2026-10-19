<x-layout >

<form method="POST" action="/ideas/{{ $idea->id }}">

  @csrf
  @method('PATCH')

  <div class="col-span-full">
    <label for="description" class ="block text-sm/6 font-medium text-white">New Idea</label>
    <div class="mt-2">
      <textarea name="description" id="description" rows="3" class="block w-full rounded-md bg-white/5">{{ $idea->description }}</textarea>
    </div>

  </div>
  <div class="mt-6 flex item-center gap-x-6">
    <button class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Update</button>
     <button form="form-delete-idea"  class="block w-full bg-red-500 text-white font-bold p-4 rounded-lg">delete</button>
  </div>
</form>

<form id="form-delete-idea" method="POST" action="/ideas/{{ $idea->id }}">
@csrf
@method('DELETE');

</form>

</x-layout>