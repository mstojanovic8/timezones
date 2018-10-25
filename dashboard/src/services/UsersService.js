import Http from './Http'

const usersUrl = 'users';

const UsersService = {
  getAll: () => Http.get(usersUrl),
  add: (user) => Http.post(usersUrl, user),
  update: (user) => Http.put(`${usersUrl}/${user.uuid}`, user),
  delete: (uuid) => Http.delete(`${usersUrl}/${uuid}`)
}

export default UsersService