<div x-data="dropdownComponent(@entangle('roleIds'))" wire:ignore>
    <select id="role_select" multiple="" class="ui search fluid dropdown mini">
        <option value="2">admin</option>
        <option value="3">Super Super</option>
    </select>
</div>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('dropdownComponent', (initialData, fetchUrl = '', triggerOn = '', triggerOnEvent = '') => ({
            selectedValues: [],

            init() {
                if (Array.isArray(initialData) && initialData.length > 0) {
                    // Only populate if the initial data is in the expected format
                    this.populate(initialData);
                } else {
                    // Fetch values if initial data is not available or empty
                    this.fetchValues();
                }

                // Listen for Livewire events dynamically
                if (triggerOnEvent) {
                    Livewire.on(triggerOnEvent, () => {
                        console.log(`Event ${triggerOnEvent} triggered, fetching values`);
                        this.fetchValues();
                    });
                }

                if (triggerOn) {
                    Livewire.on(triggerOn, () => {
                        console.log(`Event ${triggerOn} triggered, fetching values`);
                        this.fetchValues();
                    });
                }
            },

            populate(data) {
                try {
                    if (Array.isArray(data)) {
                        // Set selected values based on the array of roles
                        this.selectedValues = data.map(item => item.id);
                        this.updateDropdown();
                    } else {
                        throw new Error("Data format is incorrect");
                    }
                } catch (error) {
                    console.error("Error populating dropdown:", error);
                }
            },

            fetchValues() {
                // Placeholder for an API call or fetching values dynamically
                console.log("Fetching values...");
                // Implement your fetch logic here if needed
            },

            updateDropdown() {
                this.$nextTick(() => {
                    $('#role_select').dropdown('set selected', this.selectedValues);
                });
            },

            addValue(value) {
                if (!this.selectedValues.includes(value)) {
                    this.selectedValues.push(value);
                }
            },

            removeValue(value) {
                const index = this.selectedValues.indexOf(value);
                if (index !== -1) {
                    this.selectedValues.splice(index, 1);
                }
            }
        }));
    });
</script>