const FORM = document.querySelector('form');
let tam_matrix = document.getElementById("tam-matrix");
let matrix = document.getElementById("matrix");


tam_matrix.addEventListener('change', function () {
    let matrix_size = parseInt(document.getElementById("tam-matrix").value);
    let sub_btn = document.getElementById('sub-btn');

    if (matrix == null) {
        matrix = document.createElement('div');
        matrix.id = 'matrix'
    } else {
        let rows = document.querySelectorAll('.matrix_element');
        rows.forEach(element => {
            element.remove();
        });
    };

    FORM.appendChild(createMatrix(matrix_size));

    if (sub_btn != null) {
        sub_btn.remove();
    }

    if(matrix_size){
        FORM.appendChild(createSubmitButton());
    }

})

function createMatrix(matrix_size) {
    for (let i = 0; i < matrix_size; i++) {

        let row = document.createElement('div');
        row.classList.add('flex-center');

        for (let j = 0; j < matrix_size; j++) {
            let element = document.createElement('input');
            element.type = 'number';
            element.name = 'matrix[' + i + '][' + j + ']';
            element.className = 'matrix_element col-1 noArrow';
            element.required = true;

            row.appendChild(element);
        }

        matrix.appendChild(row);
    }

    return matrix;
}

function createSubmitButton() {
    let btn = document.createElement('input');
    btn.type = 'submit';
    btn.value = 'Subir';
    btn.className = 'col-2 btn btn-primary';
    btn.id = 'sub-btn';

    return btn;
}