<x-auth-page>
    <section class="w-4/5 px-3 py-3 m-auto">
        <x-page-heading>Login</x-page-heading>
        <x-divider />
        <x-forms.form method="POST" action="/login">
            <x-forms.input label="Your Email" name="email" type="email" />
            <x-forms.input label="Password" name="password" type="password" />
            <x-forms.button type="submit">Sign in</x-forms.button>
        </x-forms.form>
    </section>
</x-auth-page>