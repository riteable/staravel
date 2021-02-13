<div class="border-top">
    <x-layout.container padding="10">
        <div class="text-gray text-center text-small">
            {{ __('Copyright © :year - :app_name', [
                'year' => date('Y'),
                'app_name' => config('app.name')
            ]) }}
        </div>
    </x-layout.container>
</div>
