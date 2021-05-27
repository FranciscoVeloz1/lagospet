const API = 'http://lagospet.test'

const ANI_API = `${API}/api/animals`
const USE_API = `${API}/api/users`
const EXCEL_TYPE = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet;charset=UTF-8';
const EXCEL_EXTENSION = '.xlsx';

function SaveAsExcel(buffer, filename) {
    const data = new Blob([buffer], { type: EXCEL_TYPE });
    saveAs(data, filename + '_export_' + new Date().getTime() + EXCEL_EXTENSION);
}

async function GetData(api, title) {
    const response = await fetch(api);
    const data = await response.json();

    if (data.length > 0) {
        console.log(data)
        const worksheet = XLSX.utils.json_to_sheet(data);
        const workbook = {
            Sheets: {
                'data': worksheet
            },
            SheetNames: ['data']
        };

        const excelBuffer = XLSX.write(workbook, { booktype: 'xlsx', type: 'array' });
        SaveAsExcel(excelBuffer, title)
    }
}

try {
    document.getElementById('animal_excel').addEventListener('click', () => {
        GetData(ANI_API, 'animales')
    })
} catch (error) { }

try {
    document.getElementById('user_excel').addEventListener('click', () => {
        GetData(USE_API, 'usuarios')
    })
} catch (error) { }