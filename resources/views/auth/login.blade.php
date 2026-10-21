<x-layout>

    <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto mt-4">
        <form method="POST" action="/login">
           @csrf
            <legend class="fieldset-legend">Login</legend>
            <label class="label" for="email">Email</label>

            <input type="email" name="email" class="input" placeholder="Your Email" />
            <x-forms.error name="email" />

            <label class="label" for="password">Password</label>
            <input type="password" name="password" class="input" placeholder="Password" />
            <button class="btn w-full btn-neutral mt-4">Login</button>
        </form>
    </fieldset>
</x-layout>