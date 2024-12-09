document.addEventListener('DOMContentLoaded', function () {
  const tipoAnimalInputs = document.querySelectorAll('input[name="tipo"]');
  const vacinasGroup = document.getElementById('vacinas-group');
  const vacinasCachorro = document.getElementById('vacinas-cachorro');
  const vacinasGato = document.getElementById('vacinas-gato');
  const outroTipoGroup = document.getElementById('outro-tipo-group');

  tipoAnimalInputs.forEach(input => {
    input.addEventListener('change', function () {
      if (this.value === 'Cachorro') {
        vacinasGroup.style.display = 'block';
        vacinasCachorro.style.display = 'block';
        vacinasGato.style.display = 'none';
        outroTipoGroup.style.display = 'none';
      } else if (this.value === 'Gato') {
        vacinasGroup.style.display = 'block';
        vacinasGato.style.display = 'block';
        vacinasCachorro.style.display = 'none';
        outroTipoGroup.style.display = 'none';
      } else {
        vacinasGroup.style.display = 'none';
        vacinasCachorro.style.display = 'none';
        vacinasGato.style.display = 'none';
        outroTipoGroup.style.display = 'block';
      }
    });
  });
});

  function atualizarVacinas(tipo) {
    const vacinaGato = ['Panleucopenia Felina (FPV)', 'Inotraqueíte Viral Felina (FHV-1)', 'Calicivírus Felino (FCV)'];
    const vacinaCachorro = ['Cinomose Canina', 'Parvovirose Canina', 'Hepatite Infecciosa Canina (Adenovírus tipo 1)', 'Leptospirose', 'Raiva', 'Canis (Bordetella bronchiseptica)'];

    const vacinaLabels = document.querySelectorAll('.checkbox-group label');
    const vacinaCheckboxes = document.querySelectorAll('.checkbox-group input');

    if (tipo === 'Gato') {
      vacinaLabels.forEach((label, index) => {
        if (vacinaGato[index]) {
          label.textContent = vacinaGato[index];
          vacinaCheckboxes[index].value = vacinaGato[index];
          vacinaCheckboxes[index].style.display = 'inline-block';
        } else {
          vacinaCheckboxes[index].style.display = 'none';
        }
      });
    } else if (tipo === 'Cachorro') {
      vacinaLabels.forEach((label, index) => {
        if (vacinaCachorro[index]) {
          label.textContent = vacinaCachorro[index];
          vacinaCheckboxes[index].value = vacinaCachorro[index];
          vacinaCheckboxes[index].style.display = 'inline-block';
        } else {
          vacinaCheckboxes[index].style.display = 'none';
        }
      });
    }
  }
// andrei
// https://www.youtube.com/watch?v=Ptbk2af68e8

