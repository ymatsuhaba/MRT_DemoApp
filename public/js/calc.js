function calc(cmd) {
    if (cmd == 'C') {
        document.form.data.value = "";
    } else {
        document.form.data.value += cmd;
    }
}