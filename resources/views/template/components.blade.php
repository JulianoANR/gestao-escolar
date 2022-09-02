<x-app-layout title="Componentes">

    <!-- Header page -->
    <div class="my-6 px-5 md:px-7">
        <div class="flex flex-wrap gap-2 justify-between items-center">
            <h1 class="text-xl font-semibold text-gray-400 dark:text-white">
                Componentes
            </h1>

            <x-layouts.breadcrumb :path="[
                __('layout.settings') => route('components')
            ]"/>
        </div>
    </div>

    <!-- Cards -->
    <div class="px-4 md:px-6">
        <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 2xl:grid-cols-4">

            <div class="card animate-up">
                <div class="card-body p-5 flex items-center space-x-4">

                    <div class="grow">
                        <h3 class="text-2xl font-semibold text-gray-900 dark:text-white">{{ '230' }}</h3>

                        <div class="font-semibold">
                            {{ 'News users' }}
                        </div>

                        <div class="mt-4 text-xs text-gray-400">
                            <span class="text-success font-bold mr-2">
                                <i class="fa-solid fa-arrow-trend-up"></i>
                                {{ '2.6%' }}
                            </span>

                            {{ 'Since last month' }}
                        </div>
                    </div>

                    <div class="w-12 h-12 bg-primary/20 text-primary flex items-center justify-center rounded">
                        <i class="fa-solid fa-user-group"></i>
                    </div>
                </div>
            </div>

            <div class="card animate-up">
                <div class="card-body p-5 flex items-center space-x-4">

                    <div class="grow">
                        <h3 class="text-2xl font-semibold text-gray-900 dark:text-white">{{ 'R$1250,35' }}</h3>

                        <div class="font-semibold">
                            {{ 'Transaction' }}
                        </div>

                        <div class="mt-4 text-xs text-gray-400 dark:text-gray-300">
                            <span class="badge-warning mr-2 rounded-full">
                                <i class="fa-solid fa-ban"></i>
                                {{ '--' }}
                            </span>

                            {{ 'Since last week' }}
                        </div>
                    </div>

                    <div class="w-12 h-12 bg-primary/20 text-primary flex items-center justify-center rounded">
                        <i class="fa-solid fa-money-bill-transfer"></i>
                    </div>
                </div>
            </div>

            <div class="card animate-up">
                <div class="card-body p-5 flex items-center space-x-4">

                    <div class="grow">
                        <h3 class="text-2xl font-semibold text-gray-900 dark:text-white">{{ '158' }}</h3>

                        <div class="font-semibold">
                            {{ 'Sales' }}
                        </div>

                        <div class="mt-4 text-xs text-gray-400 dark:text-gray-300">
                            <span class="text-danger font-bold mr-2">
                                <i class="fa-solid fa-arrow-trend-down"></i>
                                {{ '1.5%' }}
                            </span>

                            {{ 'Since last month' }}
                        </div>
                    </div>

                    <div class="w-12 h-12 bg-primary/20 text-primary flex items-center justify-center rounded">
                        <i class="fa-solid fa-sack-dollar"></i>
                    </div>
                </div>
            </div>

            <div class="card animate-up">
                <div class="card-body p-5 flex items-center space-x-4">

                    <div class="grow">
                        <h3 class="text-2xl font-semibold text-gray-900 dark:text-white"> {{ '89%' }}</h3>

                        <div class="font-semibold">
                            {{ 'Daily tasks' }}
                        </div>

                        <div class="mt-2">
                            <a class="text-xs text-gray-400 hover:underline dark:text-gray-300" href="#">
                                {{ 'See remaining' }}
                            </a>
                        </div>
                    </div>

                    <div class="w-12 h-12 bg-primary/20 text-primary flex items-center justify-center rounded">
                        <i class="fa-solid fa-list-check"></i>
                    </div>
                </div>
            </div>

            <div class="card card-primary animate-up">
                <div class="card-body p-5 flex items-center space-x-4">

                    <div class="grow">
                        <h3 class="text-2xl font-semibold text-white">{{ '230' }}</h3>

                        <div class="font-semibold text-gray-100">
                            {{ 'News users' }}
                        </div>

                        <div class="mt-4 text-xs text-gray-200">
                            <span class="font-bold mr-2">
                                <i class="fa-solid fa-arrow-trend-up"></i>
                                {{ '2.6%' }}
                            </span>

                            {{ 'Since last month' }}
                        </div>
                    </div>

                        <div class="w-12 h-12 bg-white/20 text-white flex items-center justify-center rounded-full">
                        <i class="fa-solid fa-user-group"></i>
                    </div>
                </div>
            </div>

            <div class="card card-success animate-up">
                <div class="card-body p-5 flex items-center space-x-4">

                    <div class="grow">
                        <h3 class="text-2xl font-semibold text-white">{{ 'R$1250,35' }}</h3>

                        <div class="font-semibold text-gray-100">
                            {{ 'Transaction' }}
                        </div>

                        <div class="mt-4 text-xs text-gray-200">
                            <span class="mr-2 rounded-full">
                                <i class="fa-solid fa-ban"></i>
                                {{ '--' }}
                            </span>

                            {{ 'Since last week' }}
                        </div>
                    </div>

                    <div class="w-12 h-12 bg-white/20 text-white flex items-center justify-center rounded-full">
                        <i class="fa-solid fa-money-bill-transfer"></i>
                    </div>
                </div>
            </div>

            <div class="card card-orange animate-up">
                <div class="card-body p-5 flex items-center space-x-4">

                    <div class="grow">
                        <h3 class="text-2xl font-semibold text-white">{{ '158' }}</h3>

                        <div class="font-semibold text-gray-100">
                            {{ 'Sales' }}
                        </div>

                        <div class="mt-4 text-xs text-gray-200">
                            <span class="font-bold mr-2">
                                <i class="fa-solid fa-arrow-trend-down"></i>
                                {{ '1.5%' }}
                            </span>

                            {{ 'Since last month' }}
                        </div>
                    </div>

                    <div class="w-12 h-12 bg-white/20 text-white flex items-center justify-center rounded-full">
                        <i class="fa-solid fa-sack-dollar"></i>
                    </div>
                </div>
            </div>

            <div class="card card-blue animate-up">
                <div class="card-body p-5 flex items-center space-x-4">

                    <div class="grow">
                        <h3 class="text-2xl font-semibold text-white"> {{ '89%' }}</h3>

                        <div class="font-semibold text-gray-100">
                            {{ 'Daily tasks' }}
                        </div>

                        <div class="mt-2">
                            <a class="text-xs text-gray-200 hover:underline" href="#">
                                {{ 'See remaining' }}
                            </a>
                        </div>
                    </div>

                    <div class="w-12 h-12 bg-white/20 text-white flex items-center justify-center rounded-full">
                        <i class="fa-solid fa-list-check"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid gap-6 mt-6">

            <div class="card">
                <div class="card-header">
                    {{ 'Datatable' }}
                </div>

                <div class="card-body p-5">
                    <table id="table_id" class="stripe hover display">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>City</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Jonny</td>
                            <td>27</td>
                            <td>Stockholm</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jonas</td>
                            <td>-132</td>
                            <td>Berlin</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Gustaf</td>
                            <td>-23</td>
                            <td>Sundsvall</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Fredrik</td>
                            <td>26</td>
                            <td>Goteborg</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Jonny</td>
                            <td>27</td>
                            <td>Stockholm</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jonas</td>
                            <td>-132</td>
                            <td>Berlin</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Gustaf</td>
                            <td>-23</td>
                            <td>Sundsvall</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Fredrik</td>
                            <td>26</td>
                            <td>Goteborg</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Jonny</td>
                            <td>27</td>
                            <td>Stockholm</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jonas</td>
                            <td>-132</td>
                            <td>Berlin</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Gustaf</td>
                            <td>-23</td>
                            <td>Sundsvall</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Fredrik</td>
                            <td>26</td>
                            <td>Goteborg</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    {{ 'Buttons' }}
                </div>

                <div class="card-body">
                    <div class="mb-6">
                        <p class="mb-2">
                            <strong>Default:</strong> .button && .button-[color]
                        </p>

                        <div class="flex flex-wrap items-center gap-4">
                            <button class="button button-primary">Primary</button>
                            <button class="button button-secondary">Secondary</button>
                            <button class="button button-success">Success</button>
                            <button class="button button-danger">Danger</button>
                            <button class="button button-warning">Warning</button>
                            <button class="button button-info">Info</button>
                        </div>
                    </div>

                    <div class="mb-6">
                        <p class="mb-2">
                            <strong>Size:</strong> .button-[size]
                        </p>

                        <div class="flex flex-wrap items-center gap-4">
                            <button class="button button-primary button-lg">Lg</button>
                            <button class="button button-primary">Default</button>
                            <button class="button button-primary button-sm">Sm</button>
                            <button class="button button-primary button-xs">Xs</button>
                        </div>
                    </div>

                    <div class="mb-6">
                        <p class="mb-2">
                            <strong>Outline:</strong> .button && .button-[color]-outline
                        </p>

                        <div class="flex flex-wrap items-center gap-4">
                            <button class="button button-primary-outline">Primary</button>
                            <button class="button button-secondary-outline">Secondary</button>
                            <button class="button button-success-outline">Success</button>
                            <button class="button button-danger-outline">Danger</button>
                            <button class="button button-warning-outline">Warning</button>
                            <button class="button button-info-outline">Info</button>
                        </div>
                    </div>

                    <div class="mb-6">
                        <p class="mb-2">
                            <strong>Soft:</strong> .button && .button-[color]-soft
                        </p>

                        <div class="flex flex-wrap items-center gap-4">
                            <button class="button button-primary-soft">Primary</button>
                            <button class="button button-secondary-soft">Secondary</button>
                            <button class="button button-success-soft">Success</button>
                            <button class="button button-danger-soft">Danger</button>
                            <button class="button button-warning-soft">Warning</button>
                            <button class="button button-info-soft">Info</button>
                        </div>
                    </div>

                    <div class="mb-6">
                        <p class="mb-2">
                            <strong>With icon:</strong>
                        </p>

                        <div class="flex flex-wrap items-center gap-4">
                            <button class="button button-primary">Archive <i class="fa-solid fa-box-archive"></i></button>
                            <button class="button button-secondary"><i class="fa-solid fa-plus"></i> Add post</button>
                            <button class="button button-success-outline">Success <i class="fa-solid fa-check-double"></i></button>
                            <button class="button button-danger-outline"><i class="fa-solid fa-trash-can"></i> Delete</button>
                            <button class="button button-warning-soft"><i class="fa-solid fa-triangle-exclamation"></i> Warning</button>
                            <button class="button button-info-soft">Info <i class="fa-solid fa-circle-info"></i></button>
                        </div>
                    </div>

                    <div>
                        <p class="mb-2">
                            <strong>Custom:</strong> check developer tool
                        </p>

                        <div class="flex flex-wrap items-center gap-4">
                            <button class="button button-primary-soft waves-effect">Waves effect</button>
                            <button class="button button-secondary"><i class="animate-spin fa-solid fa-spinner"></i> Loading</button>
                            <button class="button button-success-soft border-b-2 border-b-success">Success</button>
                            <button class="button button-danger" disabled>Disabled</button>
                            <div class="inline-flex">
                                <button class="button button-primary-outline button-sm rounded-r-none rounded-l-md">Prev</button>
                                <button class="button button-primary-outline button-sm rounded-none bg-primary/90 text-white">01</button>
                                <button class="button button-primary-outline button-sm rounded-none">02</button>
                                <button class="button button-primary-outline button-sm rounded-r-md rounded-l-none">Next</button>
                            </div>
                            <button class="button button-primary rounded-full">Rounded</button>
                            <button class="button button-primary-soft button-xs"><i class="fa-solid fa-plus"></i></button>
                            <button class="button button-primary-soft button-xs"><i class="fa-solid fa-share"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    {{ "Forms" }}
                </div>

                <div class="card-body">
                    <div class="mb-6">
                        <p class="mb-2">
                            <strong>Simple:</strong> .input
                        </p>

                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="w-full">
                                <label class="text-sm font-semibold pl-1 mb-2" for="example01">Name</label>
                                <input class="input is-border-danger" type="text" id="example01">
                            </div>
                            <div class="w-full">
                                <label class="text-sm font-semibold pl-1 mb-2" for="example02">Email</label>
                                <input class="input is-border-success" type="email" id="example02">
                            </div>
                            <div class="w-full">
                                <label class="text-sm font-semibold pl-1 mb-2" for="example03">Password</label>
                                <input class="input" type="password" id="example03">
                            </div>
                            <div class="w-full">
                                <label class="text-sm font-semibold pl-1 mb-2" for="example04">Data</label>
                                <input class="input" type="date" id="example04">
                            </div>
                            <div class="w-full">
                                <label class="text-sm font-semibold pl-1 mb-2" for="example05">Tempo</label>
                                <input class="input" type="time" id="example05">
                            </div>
                            <div class="w-full">
                                <label class="text-sm font-semibold pl-1 mb-2" for="example06">Select</label>
                                <select class="input" id="example06">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="w-full">
                                <label class="text-sm font-semibold pl-1 mb-2">Datalist</label>
                                <input class="input" list="browsers" >
                                <datalist id="browsers">
                                    <option value="Edge">
                                    <option value="Firefox">
                                    <option value="Chrome">
                                    <option value="Opera">
                                    <option value="Safari">
                                </datalist>
                            </div>
                            <div class="w-full">
                                <label class="text-sm font-semibold pl-1 mb-2">Readonly - disabled</label>
                                <input class="input" type="text" value="company@gmail.com" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="mb-6">
                        <p class="mb-2">
                            <strong>Size:</strong> .input-[size]
                        </p>

                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="w-full">
                                <label class="text-sm font-semibold pl-1 mb-2" for="example08">LG</label>
                                <input class="input input-lg" type="text" id="example08">
                            </div>
                            <div class="w-full">
                                <label class="text-sm font-semibold pl-1 mb-2" for="example09">Default</label>
                                <input class="input" type="text" id="example09">
                            </div>
                            <div class="w-full">
                                <label class="text-sm font-semibold pl-1 mb-2" for="example10">SM</label>
                                <input class="input input-sm" type="text" id="example10">
                            </div>
                        </div>
                    </div>

                    <div class="mb-6">
                        <p class="mb-2">
                            <strong>Custom:</strong> Check developer tool
                        </p>

                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="relative">
                                <input class="input pl-10" type="text">

                                <div class="absolute inset-y-0 left-0 px-3 text-gray-400 flex items-center pointer-events-none">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                            </div>

                            <div class="inline-flex items-center">
                                <label class="h-full bg-gray-100 px-4 flex items-center text-gray-400 shadow rounded-l border border-gray-300 border-r-0 dark:bg-white/10 dark:border-zinc-700 dark:text-gray-300" for="example19">
                                    <i class="fa-solid fa-dollar-sign"></i>
                                </label>

                                <input class="input rounded-l-none" id="example19" type="text">
                            </div>

                            <div class="relative">
                                <input class="input pl-10 pr-24" type="text">

                                <div class="absolute inset-y-0 left-0 px-3 text-gray-400 flex items-center pointer-events-none">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </div>

                                <select class="absolute inset-y-0 right-0 pl-2 pr-8 rounded bg-transparent border-transparent focus:ring focus:ring-primary/30">
                                    <option selected>All</option>
                                    <option value="1">Name</option>
                                    <option value="2">Email</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div>
                        <p class="mb-2">
                            <strong>Toggle:</strong>
                        </p>

                        <div class="grid md:grid-cols-3 gap-6">

                            <ul class="space-y-2">
                                <li>
                                    <span class="font-medium">.checkbox</span>
                                </li>

                                <li>
                                    <input class="checkbox" type="checkbox" id="example11" checked>
                                    <label class="text-sm font-semibold pl-1 mb-2" for="example11">Option 01</label>
                                </li>

                                <li>
                                    <input class="checkbox" type="checkbox" id="example12">
                                    <label class="text-sm font-semibold pl-1 mb-2" for="example12">Option 02</label>
                                </li>

                                <li>
                                    <input class="checkbox" type="checkbox" id="example13">
                                    <label class="text-sm font-semibold pl-1 mb-2" for="example13">Option 03</label>
                                </li>

                                <li>
                                    <input class="checkbox" type="checkbox" id="example14" checked>
                                    <label class="text-sm font-semibold pl-1 mb-2" for="example14">Option 04</label>
                                </li>
                            </ul>

                            <ul class="space-y-2">
                                <li>
                                    <span class="font-medium">.checkbox-[color]</span>
                                </li>

                                <li>
                                    <input class="checkbox checkbox-success" type="checkbox" id="example15" checked>
                                    <label class="text-sm font-semibold pl-1 mb-2" for="example15">Option 01</label>
                                </li>

                                <li>
                                    <input class="checkbox checkbox-danger" type="checkbox" id="example16" checked>
                                    <label class="text-sm font-semibold pl-1 mb-2" for="example16">Option 02</label>
                                </li>

                                <li>
                                    <input class="checkbox checkbox-warning" type="checkbox" id="example17" checked>
                                    <label class="text-sm font-semibold pl-1 mb-2" for="example17">Option 03</label>
                                </li>

                                <li>
                                    <input class="checkbox checkbox-info" type="checkbox" id="example18" checked>
                                    <label class="text-sm font-semibold pl-1 mb-2" for="example18">Option 04</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    {{ 'Grid System' }}
                </div>

                <div class="card-body space-y-8">
                    <div>
                        <div class="mb-4">
                                <span class="badge badge-info">
                                    Using CSS GRID
                                </span>
                        </div>

                        <div class="flex flex-col space-y-4">
                            <!-- No GAP -->
                            <div class="grid sm:grid-cols-2 md:grid-cols-3">
                                <div class="p-4 bg-gray-100 border dark:bg-white/5 dark:border-zinc-700">Slot 01</div>
                                <div class="p-4 bg-gray-100 border dark:bg-white/5 dark:border-zinc-700">Slot 02</div>
                                <div class="p-4 bg-gray-100 border dark:bg-white/5 dark:border-zinc-700">Slot 03</div>
                                <div class="p-4 bg-gray-100 border dark:bg-white/5 dark:border-zinc-700">Slot 04</div>
                                <div class="p-4 bg-gray-100 border sm:col-span-2 dark:bg-white/5 dark:border-zinc-700">Slot 05</div>
                            </div>

                            <!-- With GAP -->
                            <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3">
                                <div class="p-4 bg-gray-100 border sm:col-span-2 dark:bg-white/5 dark:border-zinc-700">Slot 01</div>
                                <div class="p-4 bg-gray-100 border dark:bg-white/5 dark:border-zinc-700">Slot 02</div>
                                <div class="p-4 bg-gray-100 border dark:bg-white/5 dark:border-zinc-700">Slot 03</div>
                                <div class="p-4 bg-gray-100 border dark:bg-white/5 dark:border-zinc-700">Slot 04</div>
                                <div class="p-4 bg-gray-100 border dark:bg-white/5 dark:border-zinc-700">Slot 05</div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="mb-4">
                                <span class="badge badge-info">
                                    Using CSS FLEX
                                </span>
                        </div>

                        <div class="flex flex-col space-y-4">
                            <!-- No GAP -->
                            <div class="flex flex-wrap">
                                <div class="w-full md:w-1/3 | p-4 bg-gray-100 border dark:bg-white/5 dark:border-zinc-700">Slot 01</div>
                                <div class="w-full md:w-1/3 | p-4 bg-gray-100 border dark:bg-white/5 dark:border-zinc-700">Slot 02</div>
                                <div class="w-full md:w-1/3 | p-4 bg-gray-100 border dark:bg-white/5 dark:border-zinc-700">Slot 03</div>
                                <div class="w-full md:w-1/4 | p-4 bg-gray-100 border dark:bg-white/5 dark:border-zinc-700">Slot 04</div>
                                <div class="w-full md:w-2/4 | p-4 bg-gray-100 border dark:bg-white/5 dark:border-zinc-700">Slot 05</div>
                                <div class="w-full md:w-1/4 | p-4 bg-gray-100 border dark:bg-white/5 dark:border-zinc-700">Slot 06</div>
                            </div>

                            <!-- With GAP -->
                            <div class="flex flex-wrap -mx-2">
                                <div class="w-full md:w-1/4 px-2 mb-4">
                                    <div class="p-4 bg-gray-100 border dark:bg-white/5 dark:border-zinc-700">Slot 01</div>
                                </div>

                                <div class="w-full md:w-2/4 px-2 mb-4">
                                    <div class="p-4 bg-gray-100 border dark:bg-white/5 dark:border-zinc-700">Slot 02</div>
                                </div>

                                <div class="w-full md:w-1/4 px-2 mb-4">
                                    <div class="p-4 bg-gray-100 border dark:bg-white/5 dark:border-zinc-700">Slot 03</div>
                                </div>

                                <div class="w-full md:w-1/3 px-2 mb-4">
                                    <div class="p-4 bg-gray-100 border dark:bg-white/5 dark:border-zinc-700">Slot 04</div>
                                </div>

                                <div class="w-full md:w-1/3  px-2 mb-4">
                                    <div class="p-4 bg-gray-100 border dark:bg-white/5 dark:border-zinc-700">Slot 05</div>
                                </div>

                                <div class="w-full md:w-1/3  px-2">
                                    <div class="p-4 bg-gray-100 border dark:bg-white/5 dark:border-zinc-700">Slot 06</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

