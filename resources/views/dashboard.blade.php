<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Hi {{auth()->user()->name}}, You're logged in!</h5>
                    <div class="flex mt-4 gap-x-4">
                        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Application 1</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <a href="http://sso-client.test/auth/redirect" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Get started
                            </a>
                        </div>

                        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Application 2</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <a href="http://sso-client.test/auth/redirect" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Get started
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
