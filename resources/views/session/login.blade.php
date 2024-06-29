<x-auth.page>
    <section class="flex justify-center w-4/5 px-3 py-3 m-auto h-full mt-24">
        <x-auth.card>
            <x-auth.heading>Sign into your account</x-auth.heading>
                <x-forms.form method="POST" action="/login">
                    <x-forms.input label="Your Email" name="email" type="email" placeholder="email@mail.com" />
                    <x-forms.input type="password" label="Password" name="password" placeholder="Password..."/>
                    <x-forms.button type="submit" class="w-full mb-6">Sign in</x-forms.button>
                </x-forms.form>
        </x-auth.card>
    </section>
</x-auth.page>