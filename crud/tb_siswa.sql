PGDMP                          {            db_siswa    14.9    14.9     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    16394    db_siswa    DATABASE     h   CREATE DATABASE db_siswa WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_Indonesia.1252';
    DROP DATABASE db_siswa;
                postgres    false            �            1259    16402    tb_siswa    TABLE     �   CREATE TABLE public.tb_siswa (
    nis bigint NOT NULL,
    nama text NOT NULL,
    kelas_siswa integer NOT NULL,
    jurusan text NOT NULL,
    hobi text NOT NULL
);
    DROP TABLE public.tb_siswa;
       public         heap    postgres    false            �          0    16402    tb_siswa 
   TABLE DATA           I   COPY public.tb_siswa (nis, nama, kelas_siswa, jurusan, hobi) FROM stdin;
    public          postgres    false    209   |       \           2606    16410    tb_siswa tb_siswa_pkey 
   CONSTRAINT     U   ALTER TABLE ONLY public.tb_siswa
    ADD CONSTRAINT tb_siswa_pkey PRIMARY KEY (nis);
 @   ALTER TABLE ONLY public.tb_siswa DROP CONSTRAINT tb_siswa_pkey;
       public            postgres    false    209            �   u   x�3242245070���t�)H�SI,M��.ʬLL��44�t�������2B�5���(��HLˬ� �
�q�tJL���+��CRkb��_����������W���������� �$�     