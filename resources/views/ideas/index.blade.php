<x-layout >

<form method="POST" action="/ideas">
  @csrf
  <div class="col-span-full">
    <label for="description" class ="block text-sm/6 font-medium text-white">New Idea</label>
    <div class="mt-2">
      <textarea name="description" id="description" rows="3" class="block w-full rounded-md bg-white/5"></textarea>
    </div>
    <p class="mt-3 text-sm/6 text-gray-400">Have an idea you want to save it later?</p>
  </div>
  <div class="mt-6 flex item-center gap-x-6">
    <button class="block w-full bg-blue-500 text-white font-bold p-4 rounded-lg">Save</button>
  </div>
</form>
@if($ideas->count())
<div class ="mt-6 text-white" >
  <h2 class="font-bold">YOUR IDEA</h2>
  <ul class="mt-6">
    @foreach ($ideas as $idea )
      <li>
      <a href="/ideas/{{ $idea->id }}/edit" class="text-sm">{{ $idea->description }}</a>
      </li>
    @endforeach
  </ul>
</div>
@endif
</x-layout>