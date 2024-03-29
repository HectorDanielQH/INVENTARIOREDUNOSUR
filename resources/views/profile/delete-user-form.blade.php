<x-jet-action-section>
    <x-slot name="title">
        <p class="text-white">
            {{ __('Eliminar cuenta') }}
        </p>
    </x-slot>

    <x-slot name="description">
        <p class="text-white">
            {{ __('Eliminar permanentemente su cuenta.') }}
        </p>
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-100">
            {{ __('
                Tenga en cuenta que su cuenta será eliminada permanentemente y todos sus recursos e información se eliminarán de forma permanente. Antes de eliminar su cuenta, descargue cualquier dato o información que desee conservar.
            ') }}
        </div>

        <div class="mt-5">
            <x-jet-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Eliminar cuenta') }}
            </x-jet-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-dialog-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('Eliminar cuenta') }}
            </x-slot>

            <x-slot name="content">
                {{ __('
                    ¿Estás seguro de que quieres eliminar tu cuenta? Una vez que su cuenta sea eliminada, todos sus recursos e datos se eliminarán permanentemente. Por favor, introduzca su contraseña para confirmar que desea eliminar permanentemente su cuenta.
                ') }}

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-jet-input type="password" class="mt-1 block w-3/4"
                                placeholder="{{ __('Password') }}"
                                x-ref="password"
                                wire:model.defer="password"
                                wire:keydown.enter="deleteUser" />

                    <x-jet-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('Cancelar') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-3" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Eliminar cuentea') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-dialog-modal>
    </x-slot>
</x-jet-action-section>
