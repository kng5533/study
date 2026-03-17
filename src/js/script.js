const addJournal = document.querySelector('#add-journal');
const journalWrap = document.querySelector('#journal-wrap');
const journal = document.querySelector('.journal');

addJournal.addEventListener('click', () => {
  const newJournal = journal.cloneNode(true);

  newJournal.querySelectorAll('input').forEach(input => {
    input.value = '';
  });

  journalWrap.appendChild(newJournal);
});
