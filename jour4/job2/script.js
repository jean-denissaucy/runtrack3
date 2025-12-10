function jsonValueKey(jsonString, key) {
    try {
        const obj = JSON.parse(jsonString);
        return obj[key];
    } catch (e) {
        return null;
    }
}


const jsonString = '{"name": "La Plateforme_", "address": "8 rue d\'hozier", "city": "Marseille", "nb_staff": "11", "creation": "2019"}';

document.getElementById('jsonDisplay').textContent = JSON.stringify(JSON.parse(jsonString), null, 2);

function getValue() {
    const key = document.getElementById('keyInput').value;
    const value = jsonValueKey(jsonString, key);
    document.getElementById('result').textContent = value !== null && value !== undefined ?
        `${key} : ${value}` :
        `Clé "${key}" non trouvée`;
}
