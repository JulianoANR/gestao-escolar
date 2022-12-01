<x-app-layout>
    <div class="mx-3 my-2">
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <div class="flex justify-between items-center py-4 px-2 bg-white dark:bg-gray-900">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pesquisar..">
                </div>
            </div>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Nome
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Matrícula
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Escola
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Ação
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row" class="flex items-center py-4 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                            <img class="w-10 h-10 rounded-full"
                            src="{{ $user->profile_path_image ? asset('storage/'.$user->profile_path_image) : asset('assets/images/profile/default.png') }}"
                            >
                            <div class="pl-3">
                                <div class="text-base font-semibold">{{ $user->name }}</div>
                                <div class="font-normal text-gray-500">{{ $user->email }}</div>
                            </div>
                        </th>
                        <td class="py-4 px-6">
                            {{ $user->matricula }}
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex items-center">
                                {{ $user->escolas[0]->nome }}
                            </div>
                        </td>
                        <td class="py-1 px-6">
                            <div class="flex flex-row space-x-1">
                                @can('admin_access')
                                <x-a teal href="{{ route('resetar-senha', $user->id) }}">Resetar Senha</x-a>
                                @endcan
                                @can('gestor_access')
                                <x-a indigo href="{{ route('users.edit', $user->id) }}">Editar</x-a>
                                <form class="formEliminar" action="{{ route('users.destroy', $user->id) }}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit"
                                        class="px-3 py-2 rounded-md text-sm text-center leading-4 font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 hover:text-white text-red-700 border border-red-700 focus:ring-red-700 hover:bg-red-800"
                                        value="Excluir">
                                </form>
                                @endcan
                            </div>
                            {{-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a> --}}
                        </td>
                    </tr>
                    </tr>
                    @empty
                    <p>Não há resultados nesta pesquisa!</p>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
