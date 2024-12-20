/* eslint-disable */
import logo from './logo.svg';
import React from 'react';
import { BrowserRouter, Routes, Route } from "react-router-dom";
import Home from './Home';
import Lokasi from './Lokasi';

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<Home />} />
        <Route path="/home" element={<Home />} />
        <Route path="/lokasi" element={<Lokasi />} />
      </Routes>
    </BrowserRouter>
  );
}

export default App;
