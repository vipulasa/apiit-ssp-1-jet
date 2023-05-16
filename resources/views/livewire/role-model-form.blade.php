<div>
    <form class="p-6" wire:submit.prevent="save">
        <div class="mb-5">
            <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                Name
            </label>
            <input type="text" name="name" id="name" placeholder="Name" wire:model="role.name"
                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
        </div>
        @error('role.name')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
        @enderror
        <div class="mb-5">
            <label for="status" class="mb-3 block text-base font-medium text-[#07074D]">
                Status
            </label>
            <input type="checkbox" name="status" id="status" wire:model="role.status"
                class="rounded-md border border-[#e0e0e0] bg-white text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
        </div>

        <div>
            <button type="submit"
                class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                Save
            </button>
        </div>
    </form>
</div>
