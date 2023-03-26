<div x-data="{ total: 0 }" @purchase.window="total += $event.detail.productPrice" class="fixed bottom-0 left-0 w-full bg-white border-t border-gray-200 py-3 px-4 sm:px-6 lg:px-8 z-10">
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between items-center">
            <div class="flex-shrink-0 mr-4">
                <span class="text-gray-500">合計:</span>
                <span x-text="total" class="font-bold ml-1 text-gray-900"></span>
            </div>
            <button type="button"
                class="inline-flex items-center px-4 py-2 bg-primary-500 border border-transparent rounded-md font-semibold text-xs bg-yellow-400 text-white uppercase tracking-widest hover:bg-primary-600 active:bg-primary-700 focus:outline-none focus:border-primary-500 focus:ring ring-primary-300 disabled:opacity-25 transition ease-in-out duration-150">
                レジに進む
            </button>
        </div>
    </div>
</div>