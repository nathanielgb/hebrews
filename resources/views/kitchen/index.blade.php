<x-app-layout>
    <x-slot name="header">
        {{ __('Kitchen Orders') }}
    </x-slot>

    <x-slot name="headerscript">
        <!-- You need focus-trap.js to make the modal accessible -->
        <script src="{{ asset('js/focus-trap.js') }}"></script>

        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.store('data', {
                    orderId: null,
                })
            })
        </script>
    </x-slot>

    @include('components.alert-message')

    <livewire:kitchen-dashboard :orders="$orders" />

    @include('kitchen.modals.done')
    @include('kitchen.modals.clear')
    @include('orders.modals.show_addons')

    <x-slot name="scripts">
        <script>
            $('.btn-addons').on("click", function() {
                var addons = JSON.stringify($(this).data('addons'));

                Livewire.emit('setAddOnItem', addons);
            });
        </script>
    </x-slot>
</x-app-layout>
