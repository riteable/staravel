<div class="bg-gray">
    <x-layout.container>
        <div class="text-gray text-small">
            {{ __('Copyright :year - :app_name', [
                'year' => date('Y'),
                'app_name' => config('app.name')
            ]) }}
        </div>
    </x-layout.container>
</div>
