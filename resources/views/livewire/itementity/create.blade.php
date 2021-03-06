<div class="form-container container">
    <h2>Create Itementity</h2>

    <form wire:submit.prevent="saveEntity">
        <fieldset>
            <legend>Identifier</legend>
            <input type="text" wire:model.debounce.500ms="identifier">
            <div class="helper-text">
                @error('identifier') <span class="error">{{ $message }}</span> @enderror
            </div>
        </fieldset>

        <fieldset>
            <legend>Item</legend>
            <select wire:model.debounce.500ms="item_id">
                @foreach($items as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
            <div class="helper-text">
                @error('item_id') <span class="error">{{ $message }}</span> @enderror
            </div>
        </fieldset>

        <fieldset>
            <legend>Is Consumable</legend>
            <input type="checkbox" wire:model.debounce.500ms="consumable">
            <div class="helper-text">
                @error('consumable') <span class="error">{{ $message }}</span> @enderror
            </div>
        </fieldset>

        <fieldset>
            <legend>Amount</legend>
            <input type="number" wire:model.debounce.500ms="amount">
            <div class="helper-text">
                @error('amount') <span class="error">{{ $message }}</span> @enderror
            </div>
        </fieldset>

        <fieldset>
            <legend>Storagelocation</legend>
            <select wire:model.debounce.500ms="storagelocation_id">
            @foreach($storageLocations as $storageLocation)
                <option value="{{ $storageLocation->id }}">{{ $storageLocation->name }}</option>
                @endforeach
            </select>
            <div class="helper-text">
                @error('storagelocation_id') <span class="error">{{ $message }}</span> @enderror
            </div>
        </fieldset>

        <button type="submit" class="btn">Save Entitiy</button>
    </form>
</div>
