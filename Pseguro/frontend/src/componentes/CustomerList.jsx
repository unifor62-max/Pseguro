import React, { useEffect, useState } from 'react';
import api from '../services/api';

export default function CustomerList() {
  const [customers, setCustomers] = useState([]);

  useEffect(() => {
    api.get('/customers').then(res => setCustomers(res.data));
  }, []);

  return (
    <div>
      <h2>Clientes</h2>
      <ul>
        {customers.map(c => <li key={c.id}>{c.name} - {c.email}</li>)}
      </ul>
    </div>
  );
}