<x-auth.page>
    <section class="flex justify-center w-4/5 px-3 py-3 m-auto h-full mt-24">
        <x-auth.card>
            <x-auth.heading>Sign up new account</x-auth.heading>
                <x-forms.form method="POST" action="/register">
                    <x-forms.input label="Your Name" name="name" placeholder="John Doe"/>
                    <x-forms.input label="Your Email" name="email" type="email" placeholder="email@mail.com" />
                    <x-forms.input type="password" label="Password" name="password" placeholder="Password..."/>
                    <x-forms.input type="password" label="Password confirmation" name="password confirmation" placeholder="Password..." />
                    <x-forms.button type="submit" class="w-full mb-6">Sign up</x-forms.button>
                </x-forms.form>
        </x-auth.card>
</x-auth.page>