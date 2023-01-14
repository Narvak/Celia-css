if ("InstallTrigger" in window) {
    // Gecko platform, InstallTrigger available
    var by = function() {
        return InstallTrigger.install(InstallXPI);
    };
}