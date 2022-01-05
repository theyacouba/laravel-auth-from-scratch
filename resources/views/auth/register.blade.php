@extends('layouts/application')

@section('content')
<div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 mt-5">
    <div>
      <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
        Create your account now
      </h2>
      <p class="mt-2 text-center text-sm text-gray-600">
        Or
        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
          just sign in
        </a>
      </p>
    </div>
    <div class=" md:mt-0 md:col-span-2">
        <form action="{{ route('register.store') }}" method="POST" class="pt-20 pl-12">
            @csrf
            <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-6">
                        <label for="last-name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" name="name" id="name" autocomplete="family-name" class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                    </div>

                    <div class="col-span-12 sm:col-span-6">
                        <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                        <input type="text" name="email" id="email-address" autocomplete="email" class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" id="password" autocomplete="given-name" class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="password_confirm" class="block text-sm font-medium text-gray-700">Password confirmation</label>
                        <input type="password" name="password_confirm" id="password_confirm" autocomplete="family-name" class="appearance-none rounded relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900  focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Register
                </button>
            </div>
            </div>
        </form>
        </div>
    </div>
</div>

@endsection