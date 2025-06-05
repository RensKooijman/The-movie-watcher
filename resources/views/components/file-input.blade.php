<div x-data="fileUploader(@js($attributes->whereStartsWith('value')->first()))" class="flex items-center space-x-4">
    <label class="relative cursor-pointer">
        <input 
            type="file" 
            {{ $attributes }} 
            @change="previewImage($event)" 
            accept="image/*"
            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
        >
        <div class="w-32 h-32 rounded-full bg-gray-200 flex items-center justify-center overflow-hidden border-2 border-gray-300 shadow">
            <template x-if="imageUrl">
                <img :src="imageUrl" alt="Preview" class="object-cover w-full h-full rounded-full" />
            </template>
            <template x-if="!imageUrl">
                <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
                </svg>
            </template>
        </div>
    </label>
    <span class="text-gray-600 text-sm">Click to upload</span>
</div>
<script>
function fileUploader(existingUrl = null) {
    console.log(existingUrl);
    if (existingUrl == "<?= asset('storage/') ?>") {
        this.imageUrl = null;
        existingUrl = null;
        console.warn('No image URL provided for file input component.');
    }
    return {
        imageUrl: existingUrl,
        previewImage(event) {
            const file = event.target.files[0];
            if (!file) return;
            const reader = new FileReader();
            reader.onload = e => {
                this.imageUrl = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    }
}
</script>