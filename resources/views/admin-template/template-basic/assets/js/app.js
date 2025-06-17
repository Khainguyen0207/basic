// main.js
document.addEventListener('DOMContentLoaded', async () => {
    await Promise.all([
        import('./script.js'),
        import('./button-action.js'),
        import('./table.js'),
        import('./mode.js'),
        import('./passwordJs'),
        import('./form'),
    ]);
});

