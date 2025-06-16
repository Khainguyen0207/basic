// main.js
import './loading.js';
document.addEventListener('DOMContentLoaded', async () => {
    await import('./script.js');
    await import('./button-action.js');
    await import('./table.js');
    await import('./mode.js');
});
