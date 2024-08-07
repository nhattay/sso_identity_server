<x-guest-layout>
    <div class="flex flex-col items-center pb-10">
        <span class="text-gray-500">Authorization Request</span>
        <span class="text-gray-500"><p><strong>{{ $client->name }}</strong> is requesting permission to access your account.</p></span>

        <div>
            <!-- Scope List -->
            @if (count($scopes) > 0)
                <div class="scopes">
                    <p><strong>This application will be able to:</strong></p>

                    <ul>
                        @foreach ($scopes as $scope)
                            <li class="flex items-center">
                                <svg class="flex-shrink-0 w-4 h-4 text-blue-700" aria-hidden="true"
                                     xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                </svg>
                                <span class="text-base font-normal leading-tight text-gray-500 ms-3">{{ $scope->description }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <div class="flex mt-4 md:mt-6">
            <!-- Authorize Button -->
            <form method="post" action="{{ route('passport.authorizations.approve') }}">
                @csrf

                <input type="hidden" name="state" value="{{ $request->state }}">
                <input type="hidden" name="client_id" value="{{ $client->getKey() }}">
                <input type="hidden" name="auth_token" value="{{ $authToken }}">
                <x-primary-button type="submit" class="ms-3">
                    {{ __('Authorize') }}
                </x-primary-button>
            </form>

            <!-- Cancel Button -->
            <form method="post" action="{{ route('passport.authorizations.deny') }}">
                @csrf
                @method('DELETE')

                <input type="hidden" name="state" value="{{ $request->state }}">
                <input type="hidden" name="client_id" value="{{ $client->getKey() }}">
                <input type="hidden" name="auth_token" value="{{ $authToken }}">
                <button type="submit"
                        class="py-2 px-4 ms-2 text-xs font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                    Cancel
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>
