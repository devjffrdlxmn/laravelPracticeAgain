<x-layout >

<form method="POST" action="/ideas/{{ $idea->id }}">
  @csrf
  @method('PATCH')

  <div class="col-span-full">
    <label for="description" class ="block text-sm/6 font-medium text-white">New Idea</label>
    <div class="mt-2">
      <textarea name="description" id="description" rows="3" class="textarea w-full @error('description') textarea-error @enderror">{{ $idea->description }}</textarea>
      <x-forms.error name="description"/>
    </div>
  </div>
  <div class="mt-6 flex item-center gap-x-2">
    <button class="btn btn-soft">Update</button>
     <button form="form-delete-idea"  class="btn btn-error">Delete</button>
  </div>
</form>

<form id="form-delete-idea" method="POST" action="/ideas/{{ $idea->id }}">
@csrf
@method('DELETE')

</form>

</x-layout>