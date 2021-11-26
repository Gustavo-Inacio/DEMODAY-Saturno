const toggleCreateCompanyModal = () => {
    let btnCreateComany = document.querySelector("#btnCreateComapny");
    let btnEnterComany = document.querySelector("#btnEnterComapany");

    let state = {
        pos: 0 // 0 = createCompany || 1 = enterComapny
    }

    const refreshAll = () => {
        let createComapanyForm = document.querySelector("#createCompany");
        let enterComapanyForm = document.querySelector("#enterCompany");

        if(state.pos == 0){
            createComapanyForm.style.display = "block";
            btnCreateComany.classList.add("active");
            enterComapanyForm.style.display = "none";
        }
        else{
            createComapanyForm.style.display = "none";
            btnCreateComany.classList.remove("active");
            enterComapanyForm.style.display = "block";
        }
    }

    const setState = (data) => {
        
        for(let i in data){
            state[i] = data[i];
        }

        refreshAll();
    }

    btnCreateComany.onclick = () => {
        setState({pos: 0});
    }

    btnEnterComany.onclick = () => {
        setState({pos: 1});
    }

    setState({pos: 0});
}


toggleCreateCompanyModal();