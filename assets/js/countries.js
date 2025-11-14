document.addEventListener('DOMContentLoaded', () => {
  const dropdown = document.getElementById('country-dropdown');
  const flagBtn = document.getElementById('selected-flag');
  const phoneInput = document.getElementById('phone');

  fetch('./api/get_countries.php')
    .then(res => res.json())
    .then(data => {
      const countries = data
        .filter(c => c.idd?.root)
        .map(c => ({
          name: c.translations?.jpn?.common || c.name.common,
          flag: c.flags.svg,
          code: `${c.idd.root}${c.idd.suffixes ? c.idd.suffixes[0] : ''}`
        }))
        .sort((a, b) => a.name.localeCompare(b.name, 'ja'));

      const container = document.createElement('div');
      container.className =
        'w-[370px] h-[270px] border bg-white rounded-lg overflow-y-scroll shadow-lg p-3';
      container.innerHTML = `
        <input type="text" id="country-search" placeholder="国名で検索" class="w-full p-2 mb-2 border rounded">
        <ul id="country-list" class="space-y-1"></ul>
      `;
      dropdown.appendChild(container);

      const searchInput = document.getElementById('country-search');
      const list = document.getElementById('country-list');

      function renderList(filter = '') {
        list.innerHTML = '';
        countries
          .filter(c => c.name.includes(filter))
          .forEach(c => {
            const li = document.createElement('li');
            li.className = 'flex items-center space-x-2 p-1 hover:bg-gray-100 cursor-pointer';
            li.innerHTML = `
              <img src="${c.flag}" class="w-5 h-5 rounded-sm" />
              <span>${c.name} (${c.code})</span>
            `;
            li.onclick = () => {
              flagBtn.innerHTML = `<img src="${c.flag}" class="w-5 h-5 rounded-sm" />`;
              phoneInput.value = c.code + ' ';
              dropdown.classList.add('hidden');
            };
            list.appendChild(li);
          });
      }

      renderList();
      searchInput.addEventListener('input', e => renderList(e.target.value));
    })
    .catch(err => console.error('Error fetching country data:', err));
});
