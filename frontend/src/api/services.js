import apiClient from './client';

export const ExperienceService = {
  getAll() {
    return apiClient.get('/experiences');
  },
  getOne(id) {
    return apiClient.get(`/experiences/${id}`);
  },
};

// export const ProjectService = {
//   getAll() {
//     return apiClient.get('/projects');
//   },
//   // Add other methods like create, update, delete here
// };