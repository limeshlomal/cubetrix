<x-app-layout>
    <div class="container mx-auto p-6">
        <div class="flex justify-between items-center mb-4">
            <ul class="flex space-x-4 rtl:space-x-reverse">
                <li>
                    <a href="javascript:;" class="text-primary hover:underline text-lg font-semibold">Create User</a>
                </li>
            </ul>
            <x-href-button href="#">Back</x-href-button>
        </div>

        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div x-data="form">
                <form class="space-y-5" @submit.prevent="submitForm1()">
                    <div :class="[isSubmitForm1 ? (form1.name ? 'has-success' : 'has-error') : '']">
                        <label for="fullName">Full Name</label>
                        <input id="fullName" type="text" placeholder="Enter Full Name" class="form-input" x-model="form1.name" />
                        <template x-if="isSubmitForm1 && form1.name">
                            <p class="text-[#1abc9c] mt-1">Looks Good!</p>
                        </template>
                        <template x-if="isSubmitForm1 && !form1.name">
                            <p class="text-danger mt-1">Please fill the Name</p>
                        </template>
                    </div>
                    <button type="submit" class="btn btn-primary !mt-6">Submit Form</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
