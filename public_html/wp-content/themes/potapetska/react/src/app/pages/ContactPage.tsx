import { useState } from "react";
import { Header } from "../components/Header";
import { Footer } from "../components/Footer";

const TEAM_MEMBER_IMG = "https://images.unsplash.com/photo-1560250097-0b93528c311a?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&q=80&w=400";

const teamMembers = [
  {
    name: "Ing. Petr Novák",
    role: "Vedoucí projektů",
    phone: "+420 312 681 158",
    email: "novak@potapecska-stanice.cz",
  },
  {
    name: "Bc. Jana Svobodová",
    role: "Koordinátorka zakázek",
    phone: "+420 312 681 159",
    email: "svobodova@potapecska-stanice.cz",
  },
  {
    name: "Mgr. Martin Dvořák",
    role: "Technický specialista",
    phone: "+420 312 681 160",
    email: "dvorak@potapecska-stanice.cz",
  },
  {
    name: "Ing. Lucie Procházková",
    role: "Obchodní ředitelka",
    phone: "+420 312 681 161",
    email: "prochazkova@potapecska-stanice.cz",
  },
];

export function ContactPage() {
  const [formData, setFormData] = useState({
    name: "",
    company: "",
    email: "",
    phone: "",
    service: "",
    message: "",
  });
  const [gdprConsent, setGdprConsent] = useState(false);
  const [submitted, setSubmitted] = useState(false);

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    setSubmitted(true);
    setTimeout(() => setSubmitted(false), 4000);
    setFormData({ name: "", company: "", email: "", phone: "", service: "", message: "" });
    setGdprConsent(false);
  };

  const inputStyle: React.CSSProperties = {
    width: "100%",
    background: "#ffffff",
    border: "1px solid rgba(3,56,105,0.15)",
    borderRadius: "3px",
    color: "#033869",
    fontSize: "0.9rem",
    padding: "11px 14px",
    outline: "none",
    fontFamily: "'Barlow', sans-serif",
    transition: "border-color 0.2s",
    boxSizing: "border-box",
  };

  const labelStyle: React.CSSProperties = {
    display: "block",
    color: "#033869",
    fontSize: "0.72rem",
    fontWeight: 700,
    letterSpacing: "0.1em",
    textTransform: "uppercase",
    marginBottom: "6px",
  };

  return (
    <div
      style={{
        fontFamily: "'Barlow', sans-serif",
        overflowX: "hidden",
        minWidth: "320px",
      }}
    >
      <Header />

      <main>
        {/* Hero Section */}
        <section
          style={{
            background: "linear-gradient(135deg, #033869 0%, #022d5e 100%)",
            padding: "140px 0 80px",
            position: "relative",
          }}
        >
          <div className="max-w-screen-xl mx-auto px-6" style={{ position: "relative", zIndex: 1 }}>
            <div style={{ maxWidth: "700px" }}>
              <div
                style={{
                  display: "inline-flex",
                  alignItems: "center",
                  gap: "10px",
                  marginBottom: "20px",
                }}
              >
                <div style={{ width: "36px", height: "3px", background: "#fcdb00" }} />
                <span
                  style={{
                    color: "#fcdb00",
                    fontSize: "0.78rem",
                    fontWeight: 700,
                    letterSpacing: "0.16em",
                    textTransform: "uppercase",
                  }}
                >
                  Kontakt
                </span>
              </div>
              <h1
                style={{
                  fontFamily: "'Barlow Condensed', sans-serif",
                  fontSize: "clamp(2.5rem, 5vw, 4rem)",
                  fontWeight: 800,
                  color: "#ffffff",
                  textTransform: "uppercase",
                  lineHeight: 1.1,
                  marginBottom: "20px",
                }}
              >
                Napište nám
              </h1>
              <p
                style={{
                  color: "rgba(226,232,240,0.85)",
                  fontSize: "1.15rem",
                  lineHeight: 1.7,
                }}
              >
                Odpovíme vám do 24 hodin v pracovní dny. Pro urgentní případy volejte přímo.
              </p>
            </div>
          </div>
        </section>

        {/* Contact Form Section */}
        <section
          style={{
            background: "#f0f2f5",
            padding: "100px 0",
          }}
        >
          <div className="max-w-screen-xl mx-auto px-6">
            {/* Two columns */}
            <div
              style={{
                display: "grid",
                gridTemplateColumns: "360px 1fr",
                gap: "48px",
                alignItems: "start",
              }}
              className="lg:grid-cols-[360px_1fr] grid-cols-1"
            >
              {/* Left: contact info */}
              <div style={{ display: "flex", flexDirection: "column", gap: "0" }}>
                {/* Emergency box */}
                <div
                  style={{
                    background: "#fcdb00",
                    borderRadius: "4px",
                    padding: "24px 28px",
                    marginBottom: "20px",
                  }}
                >
                  <div
                    style={{
                      fontFamily: "'Barlow Condensed', sans-serif",
                      fontSize: "0.72rem",
                      fontWeight: 800,
                      letterSpacing: "0.14em",
                      textTransform: "uppercase",
                      color: "#033869",
                      marginBottom: "10px",
                    }}
                  >
                    ⚡ Pohotovostní dispečink 24/7
                  </div>
                  <a
                    href="tel:+420312681158"
                    style={{
                      display: "block",
                      fontFamily: "'Barlow Condensed', sans-serif",
                      fontSize: "1.8rem",
                      fontWeight: 900,
                      color: "#033869",
                      textDecoration: "none",
                      letterSpacing: "-0.01em",
                      lineHeight: 1,
                      marginBottom: "4px",
                    }}
                  >
                    +420 312 681 158
                  </a>
                  <p style={{ color: "rgba(3,56,105,0.65)", fontSize: "0.8rem", margin: 0 }}>
                    Pro urgentní zásahy a havarijní situace
                  </p>
                </div>

                {/* Contact details */}
                <div
                  style={{
                    background: "#ffffff",
                    border: "1px solid rgba(3,56,105,0.1)",
                    borderRadius: "4px",
                    padding: "24px 28px",
                    display: "flex",
                    flexDirection: "column",
                    gap: "16px",
                  }}
                >
                  {[
                    {
                      label: "Telefon",
                      value: "+420 312 681 158",
                      href: "tel:+420312681158",
                    },
                    {
                      label: "E-mail",
                      value: "info@potapecska-stanice.cz",
                      href: "mailto:info@potapecska-stanice.cz",
                    },
                    {
                      label: "Sídlo",
                      value: "Kladno, Česká republika",
                      href: undefined,
                    },
                    {
                      label: "IČO",
                      value: "25143861",
                      href: undefined,
                    },
                    {
                      label: "Provozní doba",
                      value: "Po–Pá 07:00–16:00",
                      href: undefined,
                    },
                  ].map((item, i) => (
                    <div key={i}>
                      <div
                        style={{
                          color: "#9ca3af",
                          fontSize: "0.68rem",
                          fontWeight: 700,
                          letterSpacing: "0.12em",
                          textTransform: "uppercase",
                          marginBottom: "3px",
                        }}
                      >
                        {item.label}
                      </div>
                      {item.href ? (
                        <a
                          href={item.href}
                          style={{
                            color: "#033869",
                            fontSize: "0.92rem",
                            fontWeight: 600,
                            textDecoration: "none",
                          }}
                        >
                          {item.value}
                        </a>
                      ) : (
                        <span style={{ color: "#42454e", fontSize: "0.92rem" }}>{item.value}</span>
                      )}
                    </div>
                  ))}
                </div>
              </div>

              {/* Right: form */}
              <div
                style={{
                  background: "#ffffff",
                  border: "1px solid rgba(3,56,105,0.1)",
                  borderRadius: "4px",
                  padding: "36px 40px",
                }}
              >
                <h3
                  style={{
                    fontFamily: "'Barlow Condensed', sans-serif",
                    fontSize: "1.4rem",
                    fontWeight: 800,
                    color: "#033869",
                    textTransform: "uppercase",
                    letterSpacing: "0.04em",
                    marginBottom: "6px",
                  }}
                >
                  Poptávkový formulář
                </h3>
                <p style={{ color: "#6b7280", fontSize: "0.85rem", marginBottom: "28px", lineHeight: 1.6 }}>
                  Odpovíme do 24 hodin v pracovní dny.
                </p>

                {submitted && (
                  <div
                    style={{
                      background: "rgba(252,219,0,0.12)",
                      border: "1px solid rgba(252,219,0,0.4)",
                      borderRadius: "3px",
                      padding: "14px 18px",
                      marginBottom: "20px",
                      color: "#033869",
                      fontSize: "0.88rem",
                      fontWeight: 600,
                      display: "flex",
                      alignItems: "center",
                      gap: "10px",
                    }}
                  >
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5">
                      <polyline points="20 6 9 17 4 12" />
                    </svg>
                    Poptávka odeslána. Brzy se vám ozveme!
                  </div>
                )}

                <form onSubmit={handleSubmit}>
                  <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: "14px", marginBottom: "14px" }}>
                    <div>
                      <label style={labelStyle}>Jméno *</label>
                      <input
                        required
                        type="text"
                        value={formData.name}
                        onChange={(e) => setFormData({ ...formData, name: e.target.value })}
                        placeholder="Petr Novák"
                        style={inputStyle}
                        onFocus={(e) => {
                          (e.target as HTMLInputElement).style.borderColor = "#fcdb00";
                        }}
                        onBlur={(e) => {
                          (e.target as HTMLInputElement).style.borderColor = "rgba(3,56,105,0.15)";
                        }}
                      />
                    </div>
                    <div>
                      <label style={labelStyle}>Firma</label>
                      <input
                        type="text"
                        value={formData.company}
                        onChange={(e) => setFormData({ ...formData, company: e.target.value })}
                        placeholder="Název firmy"
                        style={inputStyle}
                        onFocus={(e) => {
                          (e.target as HTMLInputElement).style.borderColor = "#fcdb00";
                        }}
                        onBlur={(e) => {
                          (e.target as HTMLInputElement).style.borderColor = "rgba(3,56,105,0.15)";
                        }}
                      />
                    </div>
                  </div>
                  <div style={{ display: "grid", gridTemplateColumns: "1fr 1fr", gap: "14px", marginBottom: "14px" }}>
                    <div>
                      <label style={labelStyle}>E-mail *</label>
                      <input
                        required
                        type="email"
                        value={formData.email}
                        onChange={(e) => setFormData({ ...formData, email: e.target.value })}
                        placeholder="vas@email.cz"
                        style={inputStyle}
                        onFocus={(e) => {
                          (e.target as HTMLInputElement).style.borderColor = "#fcdb00";
                        }}
                        onBlur={(e) => {
                          (e.target as HTMLInputElement).style.borderColor = "rgba(3,56,105,0.15)";
                        }}
                      />
                    </div>
                    <div>
                      <label style={labelStyle}>Telefon</label>
                      <input
                        type="tel"
                        value={formData.phone}
                        onChange={(e) => setFormData({ ...formData, phone: e.target.value })}
                        placeholder="+420 xxx xxx xxx"
                        style={inputStyle}
                        onFocus={(e) => {
                          (e.target as HTMLInputElement).style.borderColor = "#fcdb00";
                        }}
                        onBlur={(e) => {
                          (e.target as HTMLInputElement).style.borderColor = "rgba(3,56,105,0.15)";
                        }}
                      />
                    </div>
                  </div>
                  <div style={{ marginBottom: "14px" }}>
                    <label style={labelStyle}>Typ služby</label>
                    <select
                      value={formData.service}
                      onChange={(e) => setFormData({ ...formData, service: e.target.value })}
                      style={{ ...inputStyle, cursor: "pointer" }}
                      onFocus={(e) => {
                        (e.target as HTMLSelectElement).style.borderColor = "#fcdb00";
                      }}
                      onBlur={(e) => {
                        (e.target as HTMLSelectElement).style.borderColor = "rgba(3,56,105,0.15)";
                      }}
                    >
                      <option value="" style={{ background: "#ffffff" }}>
                        Vyberte službu...
                      </option>
                      <option value="stavebni" style={{ background: "#ffffff" }}>
                        Stavební potápěčské práce
                      </option>
                      <option value="strojni" style={{ background: "#ffffff" }}>
                        Strojní potápěčské práce
                      </option>
                      <option value="zachranarstvi" style={{ background: "#ffffff" }}>
                        Záchranářské práce
                      </option>
                      <option value="podzemni" style={{ background: "#ffffff" }}>
                        Podzemní práce
                      </option>
                      <option value="specialni" style={{ background: "#ffffff" }}>
                        Speciální práce
                      </option>
                      <option value="nadrze" style={{ background: "#ffffff" }}>
                        Průmyslové nádrže
                      </option>
                      <option value="video" style={{ background: "#ffffff" }}>
                        Video & Fotodokumentace
                      </option>
                      <option value="znalec" style={{ background: "#ffffff" }}>
                        Soudní znalec
                      </option>
                      <option value="pujcovna" style={{ background: "#ffffff" }}>
                        Půjčovna techniky
                      </option>
                      <option value="jine" style={{ background: "#ffffff" }}>
                        Jiné / Konzultace
                      </option>
                    </select>
                  </div>
                  <div style={{ marginBottom: "20px" }}>
                    <label style={labelStyle}>Popis projektu *</label>
                    <textarea
                      required
                      rows={4}
                      value={formData.message}
                      onChange={(e) => setFormData({ ...formData, message: e.target.value })}
                      placeholder="Popište váš projekt, lokalitu a specifické požadavky..."
                      style={{ ...inputStyle, resize: "vertical", minHeight: "100px" }}
                      onFocus={(e) => {
                        (e.target as HTMLTextAreaElement).style.borderColor = "#fcdb00";
                      }}
                      onBlur={(e) => {
                        (e.target as HTMLTextAreaElement).style.borderColor = "rgba(3,56,105,0.15)";
                      }}
                    />
                  </div>

                  {/* GDPR consent */}
                  <label
                    style={{
                      display: "flex",
                      alignItems: "flex-start",
                      gap: "12px",
                      marginBottom: "20px",
                      cursor: "pointer",
                    }}
                  >
                    <input
                      type="checkbox"
                      required
                      checked={gdprConsent}
                      onChange={(e) => setGdprConsent(e.target.checked)}
                      style={{
                        marginTop: "2px",
                        width: "16px",
                        height: "16px",
                        flexShrink: 0,
                        accentColor: "#fcdb00",
                        cursor: "pointer",
                      }}
                    />
                    <span style={{ color: "#6b7280", fontSize: "0.78rem", lineHeight: 1.6 }}>
                      Souhlasím se{" "}
                      <a
                        href="#"
                        onClick={(e) => e.preventDefault()}
                        style={{ color: "#033869", textDecoration: "underline", fontWeight: 600 }}
                      >
                        zpracováním osobních údajů
                      </a>{" "}
                      společností Potápěčská Stanice a.s. za účelem vyřízení mé poptávky. Souhlas mohu kdykoli
                      odvolat. *
                    </span>
                  </label>
                  <button
                    type="submit"
                    style={{
                      width: "100%",
                      background: "#fcdb00",
                      color: "#033869",
                      fontFamily: "'Barlow', sans-serif",
                      fontSize: "0.88rem",
                      fontWeight: 700,
                      letterSpacing: "0.1em",
                      textTransform: "uppercase",
                      border: "none",
                      padding: "14px",
                      borderRadius: "3px",
                      cursor: "pointer",
                      display: "flex",
                      alignItems: "center",
                      justifyContent: "center",
                      gap: "10px",
                      transition: "all 0.2s",
                    }}
                    onMouseEnter={(e) => {
                      (e.currentTarget as HTMLElement).style.background = "#e5c500";
                      (e.currentTarget as HTMLElement).style.boxShadow = "0 6px 24px rgba(252,219,0,0.4)";
                    }}
                    onMouseLeave={(e) => {
                      (e.currentTarget as HTMLElement).style.background = "#fcdb00";
                      (e.currentTarget as HTMLElement).style.boxShadow = "none";
                    }}
                  >
                    Odeslat poptávku
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5">
                      <line x1="22" y1="2" x2="11" y2="13" />
                      <polygon points="22 2 15 22 11 13 2 9 22 2" />
                    </svg>
                  </button>
                  <p
                    style={{
                      color: "#9ca3af",
                      fontSize: "0.7rem",
                      textAlign: "center",
                      marginTop: "10px",
                    }}
                  >
                    Vaše údaje jsou v bezpečí a nebudou předány třetím stranám.
                  </p>
                </form>
              </div>
            </div>
          </div>
        </section>

        {/* Map Section */}
        <section
          style={{
            background: "#ffffff",
            padding: "100px 0",
          }}
        >
          <div className="max-w-screen-xl mx-auto px-6">
            <div style={{ textAlign: "center", marginBottom: "48px" }}>
              <div
                style={{
                  display: "flex",
                  alignItems: "center",
                  gap: "10px",
                  marginBottom: "16px",
                  justifyContent: "center",
                }}
              >
                <div style={{ width: "36px", height: "3px", background: "#fcdb00" }} />
                <span
                  style={{
                    color: "#033869",
                    fontSize: "0.78rem",
                    fontWeight: 700,
                    letterSpacing: "0.16em",
                    textTransform: "uppercase",
                  }}
                >
                  Naše sídlo
                </span>
              </div>
              <h2
                style={{
                  fontFamily: "'Barlow Condensed', sans-serif",
                  fontSize: "clamp(2rem, 3.5vw, 3rem)",
                  fontWeight: 800,
                  color: "#033869",
                  textTransform: "uppercase",
                  lineHeight: 1.1,
                }}
              >
                Kde nás najdete
              </h2>
            </div>

            {/* Map placeholder */}
            <div
              style={{
                width: "100%",
                height: "500px",
                background: "#f0f2f5",
                borderRadius: "4px",
                border: "1px solid rgba(3,56,105,0.1)",
                display: "flex",
                alignItems: "center",
                justifyContent: "center",
                position: "relative",
                overflow: "hidden",
              }}
            >
              <div style={{ textAlign: "center", zIndex: 1 }}>
                <svg
                  width="64"
                  height="64"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="#033869"
                  strokeWidth="1.5"
                  style={{ margin: "0 auto 16px" }}
                >
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" />
                  <circle cx="12" cy="10" r="3" />
                </svg>
                <p
                  style={{
                    fontFamily: "'Barlow Condensed', sans-serif",
                    fontSize: "1.2rem",
                    fontWeight: 700,
                    color: "#033869",
                    textTransform: "uppercase",
                    letterSpacing: "0.05em",
                    marginBottom: "8px",
                  }}
                >
                  Potápěčská Stanice a.s.
                </p>
                <p style={{ color: "#6b7280", fontSize: "0.95rem" }}>Kladno, Česká republika</p>
                <p style={{ color: "#9ca3af", fontSize: "0.85rem", marginTop: "4px" }}>
                  [Interaktivní mapa bude doplněna]
                </p>
              </div>
            </div>
          </div>
        </section>

        {/* Team Section */}
        <section
          style={{
            background: "#f0f2f5",
            padding: "100px 0",
          }}
        >
          <div className="max-w-screen-xl mx-auto px-6">
            <div style={{ textAlign: "center", marginBottom: "64px" }}>
              <div
                style={{
                  display: "flex",
                  alignItems: "center",
                  gap: "10px",
                  marginBottom: "16px",
                  justifyContent: "center",
                }}
              >
                <div style={{ width: "36px", height: "3px", background: "#fcdb00" }} />
                <span
                  style={{
                    color: "#033869",
                    fontSize: "0.78rem",
                    fontWeight: 700,
                    letterSpacing: "0.16em",
                    textTransform: "uppercase",
                  }}
                >
                  Náš tým
                </span>
              </div>
              <h2
                style={{
                  fontFamily: "'Barlow Condensed', sans-serif",
                  fontSize: "clamp(2rem, 3.5vw, 3rem)",
                  fontWeight: 800,
                  color: "#033869",
                  textTransform: "uppercase",
                  lineHeight: 1.1,
                }}
              >
                Kontaktujte náš tým
              </h2>
            </div>

            {/* Team grid */}
            <div
              style={{
                display: "grid",
                gridTemplateColumns: "repeat(4, 1fr)",
                gap: "24px",
              }}
              className="lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-1"
            >
              {teamMembers.map((member, i) => (
                <div
                  key={i}
                  style={{
                    background: "#ffffff",
                    border: "1px solid rgba(3,56,105,0.08)",
                    borderRadius: "4px",
                    overflow: "hidden",
                    transition: "all 0.25s",
                    position: "relative",
                  }}
                  onMouseEnter={(e) => {
                    const el = e.currentTarget as HTMLElement;
                    el.style.boxShadow = "0 12px 32px rgba(3,56,105,0.1)";
                    el.style.borderColor = "rgba(3,56,105,0.15)";
                    el.style.transform = "translateY(-4px)";
                  }}
                  onMouseLeave={(e) => {
                    const el = e.currentTarget as HTMLElement;
                    el.style.boxShadow = "none";
                    el.style.borderColor = "rgba(3,56,105,0.08)";
                    el.style.transform = "translateY(0)";
                  }}
                >
                  {/* Photo */}
                  <div
                    style={{
                      width: "100%",
                      height: "280px",
                      background: "#e5e7eb",
                      position: "relative",
                      overflow: "hidden",
                    }}
                  >
                    <img
                      src={TEAM_MEMBER_IMG}
                      alt={member.name}
                      style={{
                        width: "100%",
                        height: "100%",
                        objectFit: "cover",
                        display: "block",
                      }}
                    />
                    <div
                      style={{
                        position: "absolute",
                        bottom: 0,
                        left: 0,
                        right: 0,
                        height: "60%",
                        background: "linear-gradient(to top, rgba(3,56,105,0.7) 0%, transparent 100%)",
                      }}
                    />
                  </div>

                  {/* Info */}
                  <div style={{ padding: "24px 20px" }}>
                    <h3
                      style={{
                        fontFamily: "'Barlow Condensed', sans-serif",
                        fontSize: "1.15rem",
                        fontWeight: 800,
                        color: "#033869",
                        textTransform: "uppercase",
                        letterSpacing: "0.02em",
                        marginBottom: "4px",
                        lineHeight: 1.2,
                      }}
                    >
                      {member.name}
                    </h3>
                    <p
                      style={{
                        color: "#9ca3af",
                        fontSize: "0.8rem",
                        fontWeight: 600,
                        letterSpacing: "0.05em",
                        textTransform: "uppercase",
                        marginBottom: "16px",
                      }}
                    >
                      {member.role}
                    </p>

                    <div style={{ display: "flex", flexDirection: "column", gap: "10px" }}>
                      <a
                        href={`tel:${member.phone.replace(/\s/g, "")}`}
                        style={{
                          display: "flex",
                          alignItems: "center",
                          gap: "8px",
                          color: "#6b7280",
                          fontSize: "0.85rem",
                          textDecoration: "none",
                          transition: "color 0.2s",
                        }}
                        onMouseEnter={(e) => {
                          (e.currentTarget as HTMLElement).style.color = "#fcdb00";
                        }}
                        onMouseLeave={(e) => {
                          (e.currentTarget as HTMLElement).style.color = "#6b7280";
                        }}
                      >
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
                          <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                        </svg>
                        {member.phone}
                      </a>
                      <a
                        href={`mailto:${member.email}`}
                        style={{
                          display: "flex",
                          alignItems: "center",
                          gap: "8px",
                          color: "#6b7280",
                          fontSize: "0.85rem",
                          textDecoration: "none",
                          transition: "color 0.2s",
                        }}
                        onMouseEnter={(e) => {
                          (e.currentTarget as HTMLElement).style.color = "#fcdb00";
                        }}
                        onMouseLeave={(e) => {
                          (e.currentTarget as HTMLElement).style.color = "#6b7280";
                        }}
                      >
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2">
                          <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                          <polyline points="22,6 12,13 2,6" />
                        </svg>
                        {member.email}
                      </a>
                    </div>
                  </div>

                  {/* Yellow accent */}
                  <div
                    style={{
                      position: "absolute",
                      top: 0,
                      right: 0,
                      width: "3px",
                      height: "48px",
                      background: "#fcdb00",
                    }}
                  />
                </div>
              ))}
            </div>
          </div>
        </section>
      </main>

      <Footer />
    </div>
  );
}