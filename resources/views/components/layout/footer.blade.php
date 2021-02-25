<div class="py-5">
    <x-layout.container padding="10">
        <div class="has-text-muted has-text-centered is-size-7">
            {{ __('Copyright © :year - :app_name', [
                'year' => date('Y'),
                'app_name' => config('app.name')
            ]) }}
        </div>
    </x-layout.container>
</div>
