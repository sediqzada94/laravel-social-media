
<x-admin-layout>
    <div class="pl-68 py-4 pr-4">
        <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
            <div class="flex justify-between items-center">
                <h1 class="m-4 text-3xl"> Users list </h1>
                @if (session('message'))
                    <div class="p-4 mb-4 text-sm text-fg-success-strong rounded-base bg-success-soft" role="alert">
                        <span class="font-medium">{{ session('message') }}</span>
                    </div>
                @endif
                <div class="flex gap-5">
                    <form action="{{ route('users.index') }}" class="flex gap-x-2">
                        @csrf
                        <input type="text" name="query" value="{{ request()->query('query') ?? '' }}" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Doe" />
                        <button type="submit" class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Search</button>
                    </form>
                    <a href="{{ route('users.create') }}" class="bg-blue-500 mr-4 cursor-pointer text-white px-3 h-10 py-2 rounded"> Create user </a>
                </div>
            </div>
            <hr>
            <table class="w-full text-sm text-left rtl:text-right text-body">
                <thead class="text-sm text-body bg-neutral-secondary-soft border-b rounded-base border-default">
                    <tr>
                        <th scope="col" class="px-6 py-3 font-medium">
                            id
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            name
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            email
                        </th>
                        <th scope="col" class="px-6 py-3 font-medium">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr class="bg-neutral-primary border-b border-default">
                        <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                            {{ $user->id }}
                        </th>
                        <td class="px-6 py-4">
                            @if(request()->has('query') && request()->query('query'))
                                {!! preg_replace('/(' . preg_quote(request()->query('query'), '/') . ')/i', '<mark class="bg-yellow-300">$1</mark>', e($user->name)) !!}
                            @else
                                {{ $user->name }}
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            @if(request()->has('query') && request()->query('query'))
                                {!! preg_replace('/(' . preg_quote(request()->query('query'), '/') . ')/i', '<mark class="bg-yellow-300">$1</mark>', e($user->email)) !!}
                            @else
                                {{ $user->email }}
                            @endif
                        </td>
                        <td class="px-6 py-4 flex">
                            <a href="{{ route('users.edit', $user) }}" class="text-white mr-2 bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                                Edit
                            </a>
                            <form action="{{ route('users.destroy', $user) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-white bg-danger box-border border border-transparent hover:bg-danger-strong focus:ring-4 focus:ring-danger-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none cursor-pointer">Delete</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <div class="p-4">
            {{ $users->links() }}
            </div>
        </div>

    </div>
    
</x-admin-layout>

