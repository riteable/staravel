@props(['files'])

<div
    x-data="components.uploadFiles()"
>
    <template x-for="(file, index) in {{ $files }}" :key="index">
        <div class="mt-3">
            <div class="is-flex is-justify-content-space-between">
                <div class="is-flex is-align-items-center has-icon-left">
                    <x-icon
                        name="heroicon-o-paper-clip"
                        size="18"
                        class="has-text-muted"
                    />
                    <span x-text="file.name" class="has-text-weight-bold"></span>
                </div>

                <div>
                    <x-button
                        type="button"
                        class="is-danger is-outlined is-small"
                        @click="remove(file, {{ $files }})"
                    >
                        <x-icon name="heroicon-s-x" />
                    </x-button>
                </div>
            </div>
        </div>
    </template>
</div>
