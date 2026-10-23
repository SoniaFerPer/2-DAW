function cambiarEstilo(nombre) { 
    const hojas = document.querySelectorAll("link[title]"); 
        hojas.forEach(hoja => { 
            hoja.disabled = true; // Chrome: hay que desactivarla antes de activarla 
            hoja.disabled = (hoja.title !== nombre); 
        }
    ); 
}