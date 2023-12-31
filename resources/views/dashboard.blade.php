<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Your Personal access tokens') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="border-b border-gray-200">
                    <p class="mb-8">
                        <x-button-link href="{{ route('token.showForm') }}">
                            Create new token
                        </x-button-link>
                    </p>
                    @if (count($tokens) > 0)
                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                    <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                        Name
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                                        Last used
                                                    </th>
                                                    <th scope="col" class="relative px-6 py-3">
                                                        <span class="sr-only">Delete</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @foreach ($tokens as $token)
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $token->name }}
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            {{ $token->last_used_at ? $token->last_used_at->diffForHumans() : '' }}
                                                        </td>
                                                        <td
                                                            class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                            <form method="POST"
                                                                action="{{ route('token.delete', ['token' => $token->id]) }}">
                                                                @csrf
                                                                <x-button>Delete</x-button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                                <!-- More people... -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        <p class="text-center">You don't have personal access tokens yet</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
