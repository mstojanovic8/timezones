import Http from './Http'

const timezonesUrl = 'timezones';

const TimezonesService = {
  getAll: (id = undefined) => id ? Http.get(`${timezonesUrl}/${id}`) : Http.get(timezonesUrl),
  add: (timezone) => Http.post(timezonesUrl, timezone),
  update: (timezone) => Http.put(`${timezonesUrl}/${timezone.uuid}`, timezone),
  delete: (id) => Http.delete(`${timezonesUrl}/${id}`)
}

export default TimezonesService