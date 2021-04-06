<div x-data {{ $attributes->merge(['class' => 'toast']) }} :class="{ 'is-active': $store.toast.isActive }">
    <div class="notification" :class="[$store.toast.type ? 'is-' + $store.toast.type : null]">
        <button x-show="$store.toast.options.isDismissable" class="delete" @click="$store.toast.hide()"></button>
        <div x-text="$store.toast.text"></div>
    </div>
</div>
