import axios from "axios";

const instance = axios.create({
  baseURL: "http://127.0.0.1:8000/api",
});

instance.interceptors.request.use(
  (config) => {
    // config.headers.Authorization = `Bearer ${localStorage.getItem('token')}`;
    return config;
  },
  (error) => {
    return Promise.reject(error);
  }
);

instance.interceptors.response.use(
  (response) => {
    return response;
  },
  (error) => {
    return Promise.reject(error);
  }
);

export default instance;
