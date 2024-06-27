<x-auth-page>
    <section class="w-4/5 px-3 py-3 m-auto">
        <x-page-heading>Register</x-page-heading>
        <x-divider />
        <x-forms.form method="POST" action="/login">
            <x-forms.input label="Your Name" name="name" />
            <x-forms.input label="Your Email" name="email" type="email" />
            <x-forms.input label="Password" name="password" type="password" />
            <x-forms.input label="Password confirmation" name="password confirmation" />
            <x-forms.button type="submit">Sign up</x-forms.button>
        </x-forms.form>
    </section>
</x-auth-page>