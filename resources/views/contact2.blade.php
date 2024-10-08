<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h1 class="text-3xl font-bold leading-7 text-white">Contact Us</h1>
                    <form>
                        <div class="border-b border-gray-900/10 pb-12">

                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                {{-- input du first name --}}
                                <div class="sm:col-span-3">
                                    <label for="first-name"
                                        class="block text-sm font-medium leading-6 text-gray-200">First name *</label>
                                    <div class="mt-2">
                                        <input type="text" name="first-name" id="first-name"
                                            autocomplete="given-name"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                {{-- input du last name --}}
                                <div class="sm:col-span-3">
                                    <label for="last-name"
                                        class="block text-sm font-medium leading-6 text-gray-200">Last name *</label>
                                    <div class="mt-2">
                                        <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>
                            {{-- input de l'adresse email --}}
                            <div class="sm:col-span-4">
                                <label for="email" class="block text-sm font-medium leading-6 text-white">Email
                                    address *</label>
                                <div class="mt-2">
                                    <input id="email" name="email" type="email" autocomplete="email"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            {{-- section Query Type --}}
                            <fieldset class="mt-2">
                                <legend class="block text-sm font-medium leading-6 text-white">Query Type *</legend>
                                <div class="flex mt-6 space-y-6  gap-4  grid-cols-2 ">

                                    {{-- General Enquiry --}}
                                    <div
                                        class=" flex-1 items-center rounded-md border-0 py-1.5 bg-white text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                                        <input id="generalEnquiry" name="generalEnquiry" type="radio"
                                            class=" h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">

                                        <label for="generalEnquiry"
                                            class="items-center block text-sm font-medium leading-6 text-gray-900 ">General
                                            Enquiry</label>
                                    </div>

                                    {{-- Support Request --}}
                                    <div
                                        class=" flex-1 items-center rounded-md border-0 py-1.5 bg-white text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

                                        <input id="Support Request" name="Support Request" type="radio"
                                            class="items-center h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">

                                        <label for="Support Request"
                                            class="items-center block text-sm font-medium leading-6 text-gray-900 ">Support
                                            Request</label>
                                    </div>

                                </div>
                            </fieldset>
                            <div class="mt-2">
                                <label for="about" class="block text-sm font-medium leading-6 text-white">Message
                                    *</label>
                                <div class="mt-2">
                                    <textarea id="about" name="about" rows="3"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                </div>
                            </div>
                            {{-- Section checkbox pour le consentement --}}
                            <fieldset>
                                <div class="mt-6 space-y-6">
                                    <div class="relative flex gap-x-3">
                                        <div class="flex h-6 items-center">
                                            <input id="comments" name="comments" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        </div>
                                        <div class="text-sm leading-6">
                                            <label for="comments" class="font-medium text-gray-200">I consent to being contacted by the team *</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <button type="submit" class="mt-4 block w-full border-0 font-semibold text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>





                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
